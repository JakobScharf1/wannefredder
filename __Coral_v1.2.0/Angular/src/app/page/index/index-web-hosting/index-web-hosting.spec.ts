import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexWebHosting } from './index-web-hosting';

describe('IndexWebHosting', () => {
  let component: IndexWebHosting;
  let fixture: ComponentFixture<IndexWebHosting>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexWebHosting]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexWebHosting);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
