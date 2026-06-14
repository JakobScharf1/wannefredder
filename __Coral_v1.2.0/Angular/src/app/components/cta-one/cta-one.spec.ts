import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CtaOne } from './cta-one';

describe('CtaOne', () => {
  let component: CtaOne;
  let fixture: ComponentFixture<CtaOne>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [CtaOne]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CtaOne);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
