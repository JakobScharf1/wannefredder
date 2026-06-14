import { ComponentFixture, TestBed } from '@angular/core/testing';

import { UploadItem } from './upload-item';

describe('UploadItem', () => {
  let component: UploadItem;
  let fixture: ComponentFixture<UploadItem>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [UploadItem]
    })
    .compileComponents();

    fixture = TestBed.createComponent(UploadItem);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
