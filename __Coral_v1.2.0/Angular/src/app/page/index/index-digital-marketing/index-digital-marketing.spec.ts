import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexDigitalMarketing } from './index-digital-marketing';

describe('IndexDigitalMarketing', () => {
  let component: IndexDigitalMarketing;
  let fixture: ComponentFixture<IndexDigitalMarketing>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexDigitalMarketing]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexDigitalMarketing);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
